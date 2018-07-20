/*
** my_strchr.c for my_strchr in /home/tiphanys/piscine_C/jour03/portig_t/my_strchr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Wed Oct 18 13:39:30 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 18 16:38:49 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strchr(char *str, char c)
{
  while (*str != c)
    {
      if (*str == '\0')
	{
	  return ("\0");
	}
      str++;
    }
  return (str);
}
