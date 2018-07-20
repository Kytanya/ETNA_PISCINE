/*
** go.c for go in /home/tiphanys/piscine_C/My_FTL/portig_t/part2
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Thu Nov  9 01:46:31 2017 PORTIGLIATTI Tiphanys
** Last update Fri Nov 10 23:34:12 2017 PORTIGLIATTI Tiphanys
*/
#include "ftl.h"
#include <stdlib.h>

int	select_option_second(t_ship *ship, char *line)
{
  if (my_strcmp(line, "stat") == 0)
    show_stat(ship);
  else if (my_strcmp(line, "jump") == 0)
    return (jump(ship));
  else if (my_strcmp(line, "attack") == 0)
    {
      my_putstr_color("red", "Jena : Make love...Not war!!\n");
      my_putstr("\n");
    }
  else if (my_strcmp(line, "detect") == 0)
    my_putstr_color("red", "Jena : I'm detecting validation My_FTL!!\n");
  else {
    my_putstr_color("red", "Jena : Go back to ETNA and read the Man!!\n");
    line = NULL;
    my_putstr("\n");
  }
  return (0);
}

int	select_option(t_ship *ship)
{
  char	*line;
  int	res;

  line = NULL;
  while (line == NULL)
    {
      my_putstr_color("green", "Enter an option\n");
      line = readline();
      if (my_strcmp(line, "getbonus") == 0)
	my_putstr_color("red", "Jena : You gives me bonus, not me!!\n");
      else if (my_strcmp(line, "control_system") == 0)
	system_control(ship);
      else if (my_strcmp(line, "repair_system") == 0)
	system_repair(ship);
      else
	{
	  res =  select_option_second(ship, line);
	  if (line != NULL)
	    return (res);
	}
    }
  return (0);
}

void	show_menu()
{ 
  my_putstr_color("green", "List of available options\n");
  my_putstr("\n");
  my_putstr_color("yellow", "attack\n");
  my_putstr_color("yellow", "detect\n");
  my_putstr_color("yellow", "jump\n");
  my_putstr_color("yellow", "getbonus\n");
  my_putstr_color("yellow", "repair_system\n");
  my_putstr_color("yellow", "control_system\n");
  my_putstr_color("yellow", "stat\n");
  my_putstr("\n");
}

void		show_stat(t_ship *ship)
{
  my_putstr("\n");
  my_putstr_color("red", "stat ship :\n");
  my_putstr("\n");
  my_putstr("hull :   ");
  my_put_nbr(ship->hull);
  my_putstr("\ndamage : ");
  my_put_nbr(ship->weapon->damage);
  my_putstr("\nenergy : ");
  my_put_nbr(ship->drive->energy);
  my_putstr("\nevade :  ");
  my_put_nbr(ship->tools->evade);
  my_putstr("\nsector : ");
  my_put_nbr(ship->tools->sector);
  my_putstr("\n");
}

int		jump(t_ship *ship)
{
  if (ship->tools->sector < 10)
    {
      if(ship->drive->energy != 0) {
	  ship->drive->energy--;
	  ship->tools->sector++;
	  my_putstr_color("red", "sector : ");
	  my_put_nbr(ship->tools->sector);
	  my_putstr("\n");
	  if (ship->tools->sector == 10) {
	      my_putstr_color("green", "Samantha is dead !! You win!!\n");
	      show_stat(ship);
	      return (1);
	    }
	  return (0);
	}
      else {
	  my_putstr_color("yellow", "End of Game, You loose\n");
	  my_putstr_color("red", "Jena : Go back to ETNA...Learn to code!!\n");
	  return (1);
	}
    }
  return (1);
}
