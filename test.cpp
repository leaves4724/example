#include<iostream>
using namespace std;

class Shape{
	protected:
		int width,height;
	public:
		Shape (int a=0,int b=0){
			width = a;
			height = b;
		}
		virtual int area() = 0;
};
class Rectangle:public Shape{
	public:
		Rectangle(int a=0,int b=0):Shape(a,b){
			width = a,height = b;
		}
		int area(){
			cout<<"The area of this Rectangle:"<<width * height<<endl;
		}
};
class Triangle:public Shape{
	public:
		Triangle(int a=0,int b=0):Shape(a,b){
			width = a,height = b;
		}
		int area(){
			cout<<"The area of this triangle:"<<width * height<<endl;
		}
};
void draw(Shape *s) {
	s->area();
}
int main(){
	Shape *shape;
	Rectangle rec(10,7);
	Triangle tri(10,5);
	
	draw(&rec);
	draw(&tri);

	return 0;
	
}
