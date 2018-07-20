/*
** my_strcat.c for my_strcat in /home/tiphanys/piscine_C/jour04/portig_t/my_strcat
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Fri Oct 20 00:58:45 2017 PORTIGLIATTI Tiphanys
** Last update Fri Oct 20 01:34:40 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strcat(char *dest, char *src)
{
  int	i;
  int	j;

  i = 0;
  j = 0;
  while (dest[i])
    {
      i++;
    }
  while (src[j])
    {
      dest[i] = src[j];
      i++;
      j++;
    }
  dest[i] = '\0';
  return (dest);
}
