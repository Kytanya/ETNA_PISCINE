/*
** my_list_size.c for my_list_size in /home/tiphanys/piscine_C/jour09/portig_t/my_list_size
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Wed Oct 25 13:52:41 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 25 14:00:20 2017 PORTIGLIATTI Tiphanys
*/

#include "my_list.h"
#include <stdlib.h>

int	my_list_size(t_list *begin)
{
  int	i;

  i = NULL;
  while (begin != NULL)
    {
      begin = begin->next;
      i++;
    }
  return (i);
}
