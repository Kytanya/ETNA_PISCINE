/*
** my_strcpy.c for my_strcpy in /home/tiphanys/piscine_C/jour04/portig_t/my_strcpy
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Thu Oct 19 19:00:14 2017 PORTIGLIATTI Tiphanys
** Last update Thu Oct 19 20:20:24 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strcpy(char *dest, char *src)
{
  int	i;

  i = 0;
  while (src[i] != '\0')
    {
      dest[i] = src[i];
      i++;
    }
  dest[i] = '\0';
  return(dest);
}
