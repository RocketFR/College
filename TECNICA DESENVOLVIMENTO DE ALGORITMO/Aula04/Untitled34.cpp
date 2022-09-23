#include <stdio.h>
int main(){  
    int a = 1 ;    
    int aprovado = 0;
    int reprovado = 0;
    int exame = 0;
    for (a =1; a <= 60; a++)
    {       
       int x= 0;
	   int y= 0;     
       printf("\nDigite a nota 1 do aluno.\n");
       scanf("%d", &x);
       printf("Digite a nota 2 do aluno.\n");
       scanf("%d", &y);
        int media = (x+y)/2;
        
        if (media >=5 )
        {  
          aprovado++;
        }
        if (media >= 3 && media < 5)
        {
        reprovado++;
        }
        if (media < 3)
        {
         exame++;
        }   
     
                
          
         
    }
    
    
    printf("O numeros de alunos aprovados é%d\n", aprovado);
    printf("O numeros de alunos reprovados é%d\n", reprovado);
    printf("O numeros de alunos em exame é%d\n", exame);
    
    
    }


