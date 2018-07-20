/*
** my_sort_int_tab.c for my_sort_int_tab in /home/tiphanys/piscine_C/jour04/portig_t/my_sort_int_tab
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Thu Oct 19 09:20:31 2017 PORTIGLIATTI Tiphanys
** Last update Thu Oct 19 21:17:26 2017 PORTIGLIATTI Tiphanys
*/

void	my_sort_int_tab(int *tab, int size)
{
  int	i;
  int	stock;
  int	swap;
  
  swap = 1;
  while (swap == 1)
    {
      swap = 0;
      i = 0;
      while (i < size-1)
	{
	  if (tab[i] > tab[i+1])
	    {
	      stock = tab[i];
	      tab[i] = tab[i+1];
	      tab[i+1] = stock;
	      swap = 1;
	    }
	  i++;
	}
    }
}
