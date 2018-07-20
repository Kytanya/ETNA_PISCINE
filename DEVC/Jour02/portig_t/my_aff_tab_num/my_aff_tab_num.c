/*
** my_aff_tab_num.c for my_aff_tab_num in /home/tiphanys/piscine_C/jour02/portig_t/my_aff_tab_num
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Tue Oct 17 01:25:38 2017 PORTIGLIATTI Tiphanys
** Last update Tue Oct 17 03:02:09 2017 PORTIGLIATTI Tiphanys
*/

void	my_putchar(char c);

void	my_aff_tab_num(int tab[], int size)
{
  int	x;
  
  x = 0;
  while (x < size)
    {
      my_putchar(tab[x] + '0');
      my_putchar('\n');
      x++;
    }
}
