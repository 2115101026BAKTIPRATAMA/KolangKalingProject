import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class Laser2 here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class Laser2 extends Actor
{
    /**
     * Act - do whatever the Laser2 wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public Laser2 (){
        setRotation(180);
        //getWorld().addObject(new Alien() , Greenfoot.getRandomNumber(595),1);
    }
    public void act()
    {
        move(10);
        laserCollision();
    }
    
        private  void laserCollision()
    {
        if (isTouching(Hiro.class))
        {
            removeTouching(Hiro.class);
           getWorld().addObject(new Boom(),getX(),getY());
              //removeTouching(Alien.class);
              
        }else if (isAtEdge())
            getWorld().removeObject(this);
    }
}
