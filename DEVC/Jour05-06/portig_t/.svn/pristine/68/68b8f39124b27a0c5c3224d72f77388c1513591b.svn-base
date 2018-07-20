/*
** my_put_nbr.c for my_put_nbr in /home/tiphanys/piscine_C/jour05-06/portig_t/my_put_nbr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Thu Oct 19 18:46:31 2017 PORTIGLIATTI Tiphanys
** Last update Fri Oct 20 03:46:55 2017 PORTIGLIATTI Tiphanys
*/

void	my_putchar(char c);

void	my_put_nbr(int n)
{
  int	count;
  int	res;
  long	nb;

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
