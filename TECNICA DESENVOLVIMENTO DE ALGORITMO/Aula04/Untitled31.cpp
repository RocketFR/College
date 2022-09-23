#include <stdio.h>
int main(){
    int a = 1 ;    
    int total = 0;
    for (int a = 1; a <= 10; a++)
    {  
	int x= 0;
	int y= 0;     
       printf("\nDigite a nota 1 do aluno.\n");
       scanf("%d", &x);
       printf("Digite a nota 2 do aluno.\n");
       scanf("%d", &y);
       
        int media = (x+y)/2;        
        printf("\na media individual do aluno eh\n%d", +media);
        
        total +=  media;
        
        
         
    }
    
    
    printf("\nA media total de todos os alunos eh\n%d",  total/10);
    
    
    }
