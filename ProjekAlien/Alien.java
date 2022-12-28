import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class Alien here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */


public class Alien extends Actor
{
    /**
     * Act - do whatever the Alien wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public Alien (){
        setRotation(180);
        //getWorld().addObject(new Alien() , Greenfoot.getRandomNumber(595),1);
    }
    
    public Alien (int speed){
        setRotation(180);
        this.speed=speed;
    }
    
    public int speed = 3;
    
    public void act()
    {
        alienmove();
    
    }
    
    protected void alienmove(){
         move(speed);
        if(isAtEdge()){
            getWorld().removeObject(this);
        }
    }

    }
  
    
  
    
    


