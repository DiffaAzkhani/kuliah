public class Mobil{
	//property...
	private String model;
	private int maxspeed;
	
	//behavior...
	public void setModel(String param1)
	{
		model = param1;
	}
	public void setSpeed(int param2)
	{
		maxspeed = param2;
	}
	
	public String getModel()
	{
		return model;
	}
	public int getSpeed()
	{
		return maxspeed;
	}
}