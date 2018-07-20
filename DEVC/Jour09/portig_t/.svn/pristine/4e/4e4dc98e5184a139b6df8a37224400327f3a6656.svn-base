/*
** my_params_in_list.c for my_params_in_list in /home/tiphanys/piscine_C/jour09/portig_t/my_params_in_list
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Wed Oct 25 05:20:47 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 25 12:42:18 2017 PORTIGLIATTI Tiphanys
*/

#include "my_list.h"
#include <stdlib.h>

t_list		*add_item(void *data, t_list *list)
{
  t_list	*node;

  node = malloc(sizeof(*node));
  if (node == NULL)
    return (0);
  node->data = data;
  node->next = list;
  return (node);
}

t_list		*my_params_in_list(int argc, char **argv)
{
  t_list	*list;
  int		i;

  i = 0;
  list = NULL;
  while (i < argc)
    {
      list = add_item(argv[i], list);
      i++;
    }
  return(list);
}
