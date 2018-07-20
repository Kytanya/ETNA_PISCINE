/*
** my_str_to_wordtab.c for my_str_to_wordtab in /home/tiphanys/piscine_C/jour07/portig_t/my_str_to_wordtab
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Tue Oct 24 10:03:17 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 25 00:56:46 2017 PORTIGLIATTI Tiphanys
*/

#include <stdlib.h>

char	alpha(char c)
{
  if ((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))
    {
      return (1);
    }
  if (c >= '0' && c <= '9')
    {
      return (1);
    }
  else
    {
      return (0);
    }
}

char	count(char *str)
{
  int	i;
  int	count;

  i = 0;
  count = 0;
  while (str[i] != '\0')
    {
      if (alpha(str[i]) == 1)
	{
	  while (alpha(str[i]) == 1)
	    {
	      i++;
	    }
	  count++;
	}
      else
	{
	  i++;
	}
    }
  return (count);
}

int	len(char *str)
{
  int	i;

  i = 0;
  while (alpha(str[i]) == 1)
    {
      i++;
    }
  return (i);
}

char	**copymytab(char **tab, char *str, int i, int j)
{
  int	k;
  
  k = 0;
  while (alpha(str[i + k]) != 0)
    {
      tab[j][k] = str[i + k];
      k++;
    }
  tab[j][k + 1] = '\0';
  return (tab);
}

char	**my_str_to_wordtab(char *str)
{
  char	**tab;
  int	word_count;
  int	nel;
  int	i;
  int	j;

  i = 0;
  j = 0;
  word_count = count(str);
  tab = malloc(sizeof(char *) * (word_count + 1));
  while (str[i] != '\0')
    {
      if (alpha(str[i]) == 1)
	{
	  nel = len(str + i);
	  tab[j] = malloc(sizeof(char) * (nel + 1));
	  tab = copymytab(tab, str, i, j);
	  i = i + nel;
	  j++;
	}
      else
	i++;
    }
  tab [j + 1] = "\0";
  return (tab);
}
