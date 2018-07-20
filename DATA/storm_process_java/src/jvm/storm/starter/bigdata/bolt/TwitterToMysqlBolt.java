package storm.starter.bigdata.bolt;

import org.apache.storm.topology.BasicOutputCollector;
import org.apache.storm.topology.OutputFieldsDeclarer;
import org.apache.storm.topology.base.BaseBasicBolt;
import org.apache.storm.tuple.Fields;
import org.apache.storm.tuple.Tuple;
import org.apache.storm.tuple.Values;
import storm.starter.bigdata.util.MyProperties;
import twitter4j.Status;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;
import java.util.Map;
import java.util.TimeZone;

public  class TwitterToMysqlBolt extends BaseBasicBolt {
    private static final long serialVersionUID = 42L;

    public void declareOutputFields(OutputFieldsDeclarer declarer)
    {
        declarer.declare(new Fields("tweet"));
    }

    public void execute(Tuple input, BasicOutputCollector collector)
    {

        try {
            // The newInstance() call is a work around for some
            // broken Java implementations

            Class.forName("com.mysql.jdbc.Driver").newInstance();
        } catch (Exception ex) {
            // handle the error
        }

        Status status = (Status) input.getValueByField("tweet");
        if(status != null) {


            // parse Date de creation en format timestamp
            SimpleDateFormat createdAt =
                    new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");


            String placeCountry = "";
            String placeFullName = "";

            if(status.getPlace() != null)
            {
                placeCountry  = status.getPlace().getCountry();
                placeFullName =status.getPlace().getFullName();
            }

                // filtre tweet en anglais et en francais
            if(status.getLang().equals("en") || status.getLang().equals("fr")) {


                String sqlAuthor = "INSERT INTO `bigdata`.`author` (tweet_author_id, tweet_author_name," +
                        " tweet_author_screen_name, tweet_author_location)" +
                        "VALUES(\"" + status.getUser().getId() + "\", "
                        + "\"" + status.getUser().getName() + "\", "
                        + "\"" + status.getUser().getScreenName() + "\", "
                        + "\"" + status.getUser().getLocation() + "\") ";
                this.insertDB(sqlAuthor.replaceAll("'", "''"));


                String sqlTweet = "INSERT INTO `bigdata`.`tweet` (tweet_id, tweet_author_id, tweet_created_at," +
                        " tweet_lang, tweet_place_country, tweet_place_full_name, tweet_text)" +
                        "VALUES(\"" + status.getId() + "\", "
                        + "\"" + status.getUser().getId() + "\", "
                        + "\"" + createdAt.format(status.getCreatedAt()) + "\", "
                        + "\"" + status.getUser().getLang() + "\", "
                        + "\"" + placeCountry + "\", "
                        + "\"" + placeFullName + "\", "
                        + "\"" + status.getText().replaceAll("\"", "''")
                        + "\") ";
                this.insertDB(sqlTweet.replaceAll("'", "''"));

                collector.emit(new Values(status));
            }
        }
    }

    /**
     * Play a request on MySQL Database
     * @param sql
     */
    private void insertDB(String sql)
    {
        String url = MyProperties.getProperties("mysql_string");
        String username = MyProperties.getProperties("mysql_user");
        String password = MyProperties.getProperties("mysql_password");

        System.out.println("Connecting database...");

        try (Connection connection = DriverManager.getConnection("jdbc:mysql://" +url +"?user=" + username +"&password=" + password)) {
            System.out.println("Database connected!");
            Statement st = (Statement) connection.createStatement();

            st.executeUpdate(sql);

            connection.close();
        } catch (SQLException e) {
            System.out.println("Error while executing request : "+sql);
        }
    }


    public Map<String, Object> getComponentConfiguration() { return null; }
}