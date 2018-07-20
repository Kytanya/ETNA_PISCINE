
/*
** my_strstr01.c for my_strstr01 in /home/tiphanys/piscine_C/jour04/portig_t/my_strstr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Oct 23 17:39:55 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 25 05:07:20 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strstr(char *str, char *to_find)
{
  int	i;

  while (*str != '\0')
    {
      if (*str == *to_find)
	{
	  i = 0;
	  while (to_find[i] == *str)
	    {
	      str++;
	      i++;
	    }
	  if (to_find[i] == '\0')
	    {
	      return (str + i);
	    }
	  i++;
	}
      else
	i++;
    }
  return ("\0");
}
