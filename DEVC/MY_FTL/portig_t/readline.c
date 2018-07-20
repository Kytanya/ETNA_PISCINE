/*
** readline.c for readline in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Nov  6 14:37:19 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 05:47:29 2017 PORTIGLIATTI Tiphanys
*/
#include <stdlib.h>
#include <unistd.h>

char		*readline()
{
  ssize_t	ret;
  char		*buff;

  if ((buff = malloc((50 + 1) * sizeof(char))) == NULL)
    return (NULL);
  if ((ret = read(0, buff, 50)) > 1)
    {
      buff[ret - 1] = '\0';
      return (buff);
    }
  free(buff);
  return (NULL);
}

void		my_putchar(const char c)
{
  write(1, &c, 1);
}

int		my_strlen(const char *str)
{
  int		i;

  i = 0;
  while (str[i] != '\0')
    i++;
  return (i);
}

void		my_putstr(const char *str)
{
  write(1, str, my_strlen(str));
}

void		my_put_nbr(int n)
{
  int		count;
  int		res;
  long		nb;

  nb = n;
  if (nb < 0)
    {
      my_putchar('-');
      nb = (nb * (-1));
    }
  if (nb < 10)
    {
      my_putchar(nb + '0');
    }
  else
    {
      count = (nb / 10);
      my_put_nbr(count);
      res = (nb % 10);
      my_putchar(res + '0');
    }
}
