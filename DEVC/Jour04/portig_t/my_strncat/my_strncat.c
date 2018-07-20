/*
** my_strncat.c for my_strncat in /home/tiphanys/piscine_C/jour04/portig_t/my_strncat
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Fri Oct 20 02:37:21 2017 PORTIGLIATTI Tiphanys
** Last update Fri Oct 20 02:57:50 2017 PORTIGLIATTI Tiphanys
*/

char	*my_strncat(char *dest, char *src, int n)
{
  int	i;
  int	j;

  i = 0;
  j = 0;

  while (dest[i])
    {
      i++;
    }
  while (src[j] && j < n)
    {
      dest[i] = src[j];
      i++;
      j++;
    }
  dest[i] = '\0';
  return (dest);
}
