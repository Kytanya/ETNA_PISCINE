
##
## Makefile for Makefile in /home/tiphanys/piscine_C/Libmy/portig_t
## 
## Made by PORTIGLIATTI Tiphanys
## Login   <portig_t@etna-alternance.net>
## 
## Started on  Sat Oct 21 12:40:08 2017 PORTIGLIATTI Tiphanys
## Last update Thu Nov  9 04:16:58 2017 PORTIGLIATTI Tiphanys
##

CC	=  gcc

NAME	=  my_ftl

SRC	=  my_string.c \
	   readline.c \
	   air_shed.c \
	   container.c \
	   system_control.c \
	   system_repair.c \
	   go.c \
	   main.c 

OBJ	=  $(SRC:%.c=%.o)

CFLAGS	=  -Wall -Werror -W

RM	=  rm -f


$(NAME):	$(OBJ)
		$(CC) -o $(NAME) $(OBJ)

all:		$(NAME)

clean:
		$(RM) $(OBJ)

fclean:		clean
		$(RM) $(NAME)

.PHONY:		all clean fclean

re:		fclean all
