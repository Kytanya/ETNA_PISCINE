
/*
** my_putstr.c for my_putstr in /home/tiphanys/piscine_C/jour03/portig_t/my_putstr
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Wed Oct 18 10:40:36 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 18 16:32:15 2017 PORTIGLIATTI Tiphanys
*/

void	my_putchar(char c);

void	my_putstr(char *str)
{
  while (*str != '\0')
    {
      my_putchar(*str);
      str++;
    }
}
