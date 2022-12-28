import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class Hiro here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class Hiro extends Actor
{
    /**
     * Act - do whatever the Hiro wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act()
    {
        // Add your action code here.
        
        //move(2);
        //if (isAtEdge())
           //setLocation(0,getY());
        gerak();
        shootLayer();
        setpoint();
        kenatembak();
    }
    private void gerak()
    {
        if(Greenfoot.isKeyDown("w"))
        setLocation(getX(),getY()-2);
        
        if(Greenfoot.isKeyDown("s"))
        setLocation(getX(),getY()+2);
        
        if(Greenfoot.isKeyDown("d"))
        setLocation(getX()+5,getY());
        
        if(Greenfoot.isKeyDown("a"))
        setLocation(getX()-5,getY());
    }
    private int laserTimer = 0;
     private void shootLayer(){
         if(laserTimer == 30){
             getWorld(). addObject(new Laser(),getX()+10,getY());
              laserTimer = 0;
            
         }else{
             laserTimer++;
            }
     }
     
     private  void setpoint(){
         if (isTouching(Alien.class))
        {
        getWorld().addObject(new Boom(),getX(),getY());
        setLocation(112,147);
           
              //removeTouching(Alien.class);
     }
    }
    
         public void kenatembak(){
         if (isTouching(Laser2.class))
        {
        getWorld().addObject(new Boom(),getX(),getY());
        setLocation(112,147);
           
              //removeTouching(Alien.class);
     }
    }
}
