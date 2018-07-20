/*
** my_strstr.c for my_strstr in /home/tiphanys/piscine_C/jour04/portig_t/my_strstr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Fri Oct 20 03:00:18 2017 PORTIGLIATTI Tiphanys
** Last update Mon Oct 23 17:30:46 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strstr(char *str, char *to_find)
{
  int	i;
  int	j;

  i = 0;
  j = 0;
  while (str[i] != '\0')
    {
      if (str[i] == to_find [j])
	{
	  j = 0;
	  while (to_find[j] == str[i + j])
	    {
	      j++;
	      if (to_find[j] == '\0')
		{
		  return (str + i);
		}
	    }
	}
      else
	{
	  i++;
	}
    }
  return ("\0");
}
