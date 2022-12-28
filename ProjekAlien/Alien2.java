import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class Alien2 here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class Alien2 extends Alien
{
    /**
     * Act - do whatever the Alien2 wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public Alien2 (){
     super();      
    }
     public Alien2 (int speed){
        super(speed);
    }
    private  int speed = 3;
    
    public void act()
    {
        super.alienmove();
        turn(1);
        shootLayer();
    }
         int laserTimer = 0;
     private  void shootLayer(){
         if(laserTimer == 30){
             getWorld(). addObject(new Laser2(),getX(),getY()-10);
              laserTimer = 0;
            
         }else{
             laserTimer++;
            }
     }
     
    

}
