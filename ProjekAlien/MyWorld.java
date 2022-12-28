import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class MyWorld here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class MyWorld extends World
{

    /**
     * Constructor for objects of class MyWorld.
     * 
     */
    public MyWorld()
    {            
        // Create a new world with 600x400 cells with a cell size of 1x1 pixels.
        super(600, 400, 1);
        
        prepare();
       
    }
    
    /**
     * Prepare the world for the start of the program.
     * That is: create the initial objects and add them to the world.
     */
    private void prepare()
    {
        Hiro hiro = new Hiro();
        addObject(hiro,54,281);

        hiro.setLocation(112,147);
        //Alien alien = new Alien();
        //addObject(new Alien() , Greenfoot.getRandomNumber(595),Greenfoot.getRandomNumber(595));
        //addObject(alien,43,547);

        Alien2 alien2 = new Alien2();
        addObject(alien2,532,160);
    }
    //public void act(){
     // if(Greenfoot.getRandomNumber(400)<1){
     //   addObject(new Alien(),1,Greenfoot.getRandomNumber(1000));
       // }
   // }
    
    public void act(){
        spwanEnemy();
        spwanEnemy2();
    }
    private  int timerAlien = 0;
    
    private  void spwanEnemy(){
        if(timerAlien==180){
            int speed = Greenfoot.getRandomNumber(4) + 1;
            addObject(new Alien(),599,Greenfoot.getRandomNumber(400));
            timerAlien = 0;
            
        }else{
            timerAlien++;
        }
    }
    
        private  void spwanEnemy2(){
        if(timerAlien==180){
            int speed = Greenfoot.getRandomNumber(4) + 2;
            addObject(new Alien2(),599,Greenfoot.getRandomNumber(400));
            timerAlien = 0;
            
        }else{
            timerAlien++;
        }
    }
    
}
