/*
** air_shed.c for air_shed in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Nov  6 10:04:00 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 12:17:02 2017 PORTIGLIATTI Tiphanys
*/

#include "ftl.h"
#include <stdlib.h>

int			add_navigation_tools_to_ship(t_ship *ship)
{
  t_navigation_tools	*node;

  my_putstr_color("cyan", "adding navigation tools in progress...\n");
  node = malloc(sizeof(*node));
  if (node == NULL)
    {
      my_putstr_color("green", "your ship explosed when you put the navigation tools\n");
      return (0);
    }
  else
    {
      node->sector = 0;
      node->evade = 25;
      node->system_state = my_strdup("online");
      ship->tools = node;
      my_putstr_color("cyan", "navigation tools have been added successfully!\n");
      return (1);
    }
}

int			add_ftl_drive_to_ship(t_ship *ship)
{
  t_ftl_drive		*node;

  my_putstr_color("cyan", "adding reactor in progress...\n");
  node = malloc(sizeof(*node));
  if (node == NULL)
    {
      my_putstr_color("green", "your ship explosed when you put the reactor\n");
      return (0);
    }
  else
    {
      node->energy = 10;
      node->system_state = my_strdup("online");
      ship->drive = node;
      my_putstr_color("cyan", "the reactor has been added successfully!\n");
      return (1);
    }
}
  
int			add_weapon_to_ship(t_ship *ship)
{
  t_weapon		*node;

  my_putstr_color("cyan", "adding weapons in progress...\n");
  node = malloc(sizeof(*node));
  if (node == NULL)
    {
      my_putstr_color("green", "your ship explosed when you put weapons\n");
      return (0);
    }
  else
    {
      node->damage = 10;
      node->system_state = my_strdup("online");
      ship->weapon = node;
      my_putstr_color("cyan", "weapons have been added successfully!\n");
      return (1);
    }
}

t_ship			*create_ship()
{
  t_ship		*node;
  
  my_putstr_color("cyan", "ship building in progress...\n");
  node = malloc(sizeof(*node));
  if (node == NULL)
    {
      my_putstr_color("green", "ship couldn't be built due to lack of materials\n");
      return (0);
    }
  node->hull = 50;
  node->weapon = NULL;
  node->drive = NULL;
  node->tools = NULL;
  node->container = NULL;
  my_putstr_color("cyan", "improved ship completed!\n");
  return (node);
}
