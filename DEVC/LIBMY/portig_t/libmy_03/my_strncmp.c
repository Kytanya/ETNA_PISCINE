/*
** my_strncmp.c for my_strncmp in /home/tiphanys/piscine_C/jour04/portig_t/my_strncmp
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Thu Oct 19 23:03:46 2017 PORTIGLIATTI Tiphanys
** Last update Fri Oct 20 00:54:34 2017 PORTIGLIATTI Tiphanys
*/

int	my_strncmp(char *s1, char *s2, int n)
{
  int	i;

  i = 0;
  while ( i < n )
    {
      if (*(s1 + i) != *(s2 + i))
	{
	  if (*(s1 + i) < *(s2 + i))
	    return (-1);
	  else
	    return (1);
	}
      i++;
    }
  return (0);
}
