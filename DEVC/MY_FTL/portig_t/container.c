/*
** container.c for container in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Nov  6 17:46:47 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 12:17:29 2017 PORTIGLIATTI Tiphanys
*/
#include "ftl.h"
#include <stdlib.h>

void		del_freight_from_container(t_ship *ship, t_freight *freight)
{
  t_freight	*tmp;

  if (ship->container->first == freight) {
    tmp = ship->container->first;
    ship->container->first = ship->container->first->next;
    if (ship->container->first != NULL)
      ship->container->first->prev = NULL;
  }
  else if (ship->container->last == freight) {
    tmp = ship->container->last;
    ship->container->last = ship->container->last->prev;
    ship->container->last->next = NULL;
  }
  else {
    tmp = ship->container->first->next;
    while (tmp != NULL && tmp != freight)
      tmp = tmp->next;
    if (tmp == freight) {
      tmp->prev->next = tmp->next;
      tmp->next->prev = tmp->prev;
    }
  }
  free(tmp);
  ship->container->nb_elem--;
}

void		get_bonus(t_ship *ship)
{
  t_freight	*tmp;
  t_freight	*tmp2;

  tmp = ship->container->first;
  while (tmp != NULL)
    {
      tmp2 = tmp;
      if (my_strcmp(tmp->item, "attackbonus") == 0)
	ship->weapon->damage += 5;
      else if (my_strcmp(tmp->item, "evadebonus") == 0)
	ship->tools->evade += 3;
      else if (my_strcmp(tmp->item, "energy") == 0)
	ship->drive->energy++;
      tmp = tmp->next;
      del_freight_from_container(ship, tmp2); 
    }
}

void		add_freight_to_container(t_ship *ship, t_freight *freight)
{
  if (freight != NULL)
    {
      if (ship->container->first == NULL)
	{
	  ship->container->first = freight;
	}
      if (ship->container->last != NULL)
	{
	  ship->container->last->next = freight;
	  freight->prev = ship->container->last;
	}
      else
	ship->container->last = freight;
      ship->container->nb_elem++;
    }
}

int		add_container_to_ship(t_ship *ship)
{
  t_container	*node;

  my_putstr_color("cyan", "adding container...\n");
  node = malloc(sizeof(*node));
  if (node == NULL)
    {
      my_putstr_color("green", "your ship explosed when put the container\n");
      return (0);
    }
  else
    {
      node->first = NULL;
      node->last = NULL;
      node->nb_elem = 0;
      ship->container = node;
      my_putstr_color("cyan", "the container has been added succesfully!\n");
      return (1);
    }
}
