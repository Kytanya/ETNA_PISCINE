/*
** my_strdup.c for my_strdup in /home/tiphanys/piscine_C/jour07/portig_t/my_strdup
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Oct 23 15:12:27 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 25 04:42:13 2017 PORTIGLIATTI Tiphanys
*/

#include <stdlib.h>

int	my_strlen(char *str);

char	*my_strdup(char *str)
{
  char	*cpy;
  int	i;

  i = 0;
  cpy = malloc(sizeof(char) * my_strlen(str));
  while (str[i] != '\0')
    {
      cpy[i] = str[i];
      i++;
    }
  cpy[i] = '\0';
  return (cpy);
}
