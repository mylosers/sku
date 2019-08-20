#include <stdio.h>
#include <stdlib.h>

typedef int Datatype;

typedef struct btnode
{
    Datatype key;
    struct btnode *lchild;
    struct btnode *rchild;
}BT;

void insertNode(BT *btnode, int value)
{
	if (*BT == NULL){
//		*BT = malloc(sizeof(BT));
//		if (*BT != NULL) {
//			(*BT)->key = value;
//			(*BT)->lchild = NULL;
//			(*BT)->rchild = NULL;
//		}
//		else {
//			printf("%d not inserted. No memory available.\n", value);
//		}
	}
	else {
//		if (value < (*BT)->data) {
//			insertNode(&((*BT)->lchild), value);
//		}
//		else {
//			if (value >(*BT)->data) {
//				insertNode(&((*BT)->rchild), value);
//			}
//			else {
//				printf("dup");
//			}
//		}
	}
}
int main()
{
    return 0;
}