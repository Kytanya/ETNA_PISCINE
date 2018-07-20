/*
** my_putchar.c for my_putchar in /home/tiphanys/piscine_C/jour01/portig_t/my_putchar
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Oct 16 14:36:50 2017 PORTIGLIATTI Tiphanys
** Last update Thu Oct 19 14:59:00 2017 PORTIGLIATTI Tiphanys
*/

#include <unistd.h>

void	my_putchar(char c)
{
  write(1, &c, 1);
}
