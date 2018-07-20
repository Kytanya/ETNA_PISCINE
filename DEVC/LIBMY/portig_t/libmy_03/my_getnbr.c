/*
** my_getnbr.c for my_getnbr in /home/tiphanys/piscine_C/jour05-06/portig_t/my_getnbr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Fri Oct 20 03:49:18 2017 PORTIGLIATTI Tiphanys
** Last update Fri Oct 20 05:02:42 2017 PORTIGLIATTI Tiphanys
*/

int	my_getnbr(char *str)
{
  int	nb;
  int	isneg;
  int	i;

  isneg = 1;
  nb = 0;
  i = 0;
  while (str[i] == '+' || str[i] == '-')
    {
      if (str[i] == '-')
	isneg = isneg * -1;
      i++;
    }
  while (str[i] != '\0')
    {
      if (str[i] >= '0' && str[i] <= '9')
	{
	  nb = nb * 10;
	  nb = nb + str[i] - '0';
	  i++;
	}
      else
	return (nb * isneg);
    }
  return (nb * isneg);
}
