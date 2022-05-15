public class Employee extends Person{
	float salary = 4000;
	String name = "Diana";
	int age = 23;
	
	public void showInfo(){
		System.out.println("Name   : "+ super.name);
		System.out.println("Age    : "+ super.age);
		System.out.println("Salary : "+ salary);
	}
}