package src.Animals;

import java.time.LocalDate;

import src.AnimalCare;
import src.Exceptions.InvalidAnimalTypeException;
import src.Utils.AnimalCreaterUtil;

public class Beaver extends Animal {

    private final int MIN_CAGE_CLEAN = 5;
    private final int MIN_FOOD_PREP = 0;
    private final int MIN_TO_FEED_FOX = 5;
    private final int HOUR_INTERVAL_OF_FEEDING = 3;

    public Beaver(String animalID, String animalNickname, String animalSpecies, boolean orp) throws InvalidAnimalTypeException {
        super(animalID,animalNickname, animalSpecies,AnimalCreaterUtil.GetAnimalType(animalSpecies),orp);
        var feedingTime = new AnimalCare(LocalDate.now().atTime(8, 0), 
                                            HOUR_INTERVAL_OF_FEEDING,
                                            MIN_FOOD_PREP,
                                            MIN_TO_FEED_FOX,
                                            MIN_CAGE_CLEAN);
        this.setFeedingTime(feedingTime);
    }
    
}
