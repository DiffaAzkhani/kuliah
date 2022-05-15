class Employee{
	float salary = 40000;
}

class Programmer extends Employee{
	int bonus = 10000;
}

public class Latihan06a{
	public static void main(String[] args){
		Programmer p = new Programmer();
		system.out.println("Programmer salary is     : " + p.salary);
		system.out.println("Bonus of Programmer is   : " + p.bonus);
	}
}