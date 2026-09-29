USE animehub;

UPDATE anime 
SET cover_image = 'assets/images/aot.jpg',
    background_image = 'assets/images/aot.jpg'
WHERE title = 'Attack on Titan';

UPDATE anime 
SET cover_image = 'assets/images/demon-slayer.jpg',
    background_image = 'assets/images/demon-slayer.jpg'
WHERE title = 'Demon Slayer';

UPDATE anime 
SET cover_image = 'assets/images/one-piece.jpg',
    background_image = 'assets/images/one-piece.jpg'
WHERE title = 'One Piece';

UPDATE anime 
SET cover_image = 'assets/images/jujutsu-kaisen.jpg',
    background_image = 'assets/images/jujutsu-kaisen.jpg'
WHERE title = 'Jujutsu Kaisen';
