/*
** my_aff_tab.c for my_aff_tab in /home/tiphanys/piscine_C/jour02/portig_t/my_aff_tab
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Tue Oct 17 00:24:55 2017 PORTIGLIATTI Tiphanys
** Last update Tue Oct 17 00:41:30 2017 PORTIGLIATTI Tiphanys
*/

void	my_putchar(char c);
  
void	my_aff_tab(char str[])
{
  int	i;
  
  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}
