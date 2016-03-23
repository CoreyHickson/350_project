SELECT * FROM characters
    JOIN backgrounds 
        ON characters.background = backgrounds.background 
    JOIN classes 
        ON characters.class = classes.class 
    JOIN class_features 
        ON characters.class = class_features.class 
    JOIN races ON characters.race = races.race 
WHERE name = 'Bob'