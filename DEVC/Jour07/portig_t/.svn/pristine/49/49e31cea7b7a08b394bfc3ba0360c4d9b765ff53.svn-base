##
## Makefile for aff_up in /home/tiphanys/piscine_C/jour07/portig_t
## 
## Made by PORTIGLIATTI Tiphanys
## Login   <portig_t@etna-alternance.net>
## 
## Started on  Mon Oct 23 11:33:23 2017 PORTIGLIATTI Tiphanys
## Last update Mon Oct 23 12:02:46 2017 PORTIGLIATTI Tiphanys
##

CC =		gcc

NAME =		aff_up

SRC =		main.c \
		my_putchar.c \
		my_putstr.c \
		my_strupcase.c

OBJ =		$(SRC:%.c=%.o)

CFLAGS =	-Wall -Werror -W

RM =		rm -f

$(NAME):	$(OBJ)
		$(CC) $(OBJ) -o $(NAME)

$(ALL):		$(NAME)

clean:
		$(RM) $(OBJ)

fclean:		clean
		$(RM) $(NAME)

.PHONY:		all clean fclean

re:		fclean all
