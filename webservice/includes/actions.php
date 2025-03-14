<?php
/**
 * @return array
 */
function getMonsters(): array
{
    return [
        [
            "id" => 1,
            "name" => "Regular",
            "flavour" => "Sweet and Sour",
            "image" => "images/regular.webp",
            "description" => "Monster Energy Original Green 500ml can, great tasting energy drink with energy blend and 160mg caffeine. The Monster Energy blend combined with caffeine gives you the energy you need in a smooth easy drinking flavour. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 2,
            "name" => "Zero Sugar",
            "flavour" => "Sweet and Sour",
            "image" => "images/zeroSugar.webp",
            "description" => "Monster Energy Original Green 500ml can, great tasting energy drink with energy blend and 160mg caffeine. The Monster Energy blend combined with caffeine gives you the energy you need in a smooth easy drinking flavour. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 3,
            "name" => "Full Throttle",
            "flavour" => "Peach and Nectarine",
            "image" => "images/fullThrottleZeroSugar.webp",
            "description" => "Monster Energy® Full Throttle® zero sugar 500ml can - carbonated energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 4,
            "name" => "Ultra",
            "flavour" => "Citrus",
            "image" => "images/ultra.webp",
            "description" => "Monster Energy Ultra 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Monster Energy Ultra has a light refreshing citrus flavour. Monster Energy Ultra doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 5,
            "name" => "Ultra Gold",
            "flavour" => "Pineapple",
            "image" => "images/ultraGold.webp",
            "description" => "Monster Energy Gold 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Gold has a refreshing Golden Pineapple flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 6,
            "name" => "Ultra Strawberry",
            "flavour" => "Strawberry",
            "image" => "images/ultraStrawberryDreams.webp",
            "description" => "Monster Energy® Ultra Strawberry Dreams® 500ml can - carbonated strawberry flavour energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 7,
            "name" => "Ultra Peachy Keen",
            "flavour" => "Peach",
            "image" => "images/ultraPeachyKeen.webp",
            "description" => "Monster Energy® Ultra Peachy Keen® 500ml can - carbonated peach flavour energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 8,
            "name" => "Ultra Fiesta Mango",
            "flavour" => "Cool Mango",
            "image" => "images/ultraFiestaMango.webp",
            "description" => "Monster Energy Ultra Fiesta 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Fiesta Mango has a cool mango flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Ultra’s lighter tasting flavour profile is a less sweet, carbonated energy drink that delivers refreshment. Ultra is great for any occasion. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 9,
            "name" => "Ultra Rosa",
            "flavour" => "Clear and Sweet",
            "image" => "images/ultraRosa.webp",
            "description" => "Monster Energy Ultra Rosá 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Rosá has a bright and sweet flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Crafted with a light and easy drinking flavor that’s also crisp and complex with a floral finish. There’s no better way to describe the taste than – it tastes like Ultra Rosá! Serve cold for maximum refreshment.",
        ],
        [
            "id" => 10,
            "name" => "Mango Loco",
            "flavour" => "Juicy Mango",
            "image" => "images/mangoLoco.webp",
            "description" => "Juiced Monster Mango Loco 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Mango Loco is a heavenly blend of exotic juice flavours certain to attract even the most stubborn spirit. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 11,
            "name" => "Pacific Punch",
            "flavour" => "Classic fruit punch",
            "image" => "images/pacificPunch.webp",
            "description" => "Punch Monster Pacific Punch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Pacific Punch typical punch is Not! Lighter less sweet and more complex plus the Monster Energy blend. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 12,
            "name" => "Pipeline Punch",
            "flavour" => "Passion Fruit, Orange, and Guava",
            "image" => "images/pipelinePunch.webp",
            "description" => "Punch Monster Pipeline Punch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Pipeline Punch is the perfect blend of the best flavours Hawaii has to offer plus the Monster Energy blend. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 13,
            "name" => "Monarch",
            "flavour" => "Peach and Nectarine",
            "image" => "images/monarch.webp",
            "description" => "Juiced Monster Monarch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Juiced Monarch has a light, subtle flavour with hints of peach and nectarine. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
        ],
        [
            "id" => 14,
            "name" => "Bad Apple",
            "flavour" => "Crisp, Dry apple",
            "image" => "images/badApple.webp",
            "description" => "Juiced Monster® Bad Apple® 500ml can - carbonated energy drink with 6% fruit juice from fruit juice concentrate, taurine, ginseng, caffeine, L-carnitine and B vitamins with sugars and sweeteners. Serve cold for maximum refreshment.",
        ]
    ];
}

/**
 * @param $id
 * @return array|false
 */
function getMonsterDetails($id): array|false
{
    $tags = [
        1 => [
            "description" => "Monster Energy Original Green 500ml can, great tasting energy drink with energy blend and 160mg caffeine. The Monster Energy blend combined with caffeine gives you the energy you need in a smooth easy drinking flavour. Serve cold for maximum refreshment.",
            "tags" => ['Sweet', 'Sour', 'regular']
        ],
        2 => [
            "description" => "Monster Energy Original Green 500ml can, great tasting energy drink with energy blend and 160mg caffeine. The Monster Energy blend combined with caffeine gives you the energy you need in a smooth easy drinking flavour. Serve cold for maximum refreshment.",
            "tags" => ['Sweet', 'Sour', 'regular']
        ],
        3 => [
            "description" => "Monster Energy® Full Throttle® zero sugar 500ml can - carbonated energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
            "tags" => ['zero', 'hamilton', 'formula1']
        ],
        4 => [
            "description" => "Monster Energy Ultra 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Monster Energy Ultra has a light refreshing citrus flavour. Monster Energy Ultra doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Serve cold for maximum refreshment.",
            "tags" => ['ultra', 'white', 'zero']
        ],
        5 => [
            "description" => "Monster Energy Gold 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Gold has a refreshing Golden Pineapple flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Serve cold for maximum refreshment.",
            "tags" => ['gold']
        ],
        6 => [
            "description" => "Monster Energy® Ultra Strawberry Dreams® 500ml can - carbonated strawberry flavour energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
            "tags" => ['strawberry']
        ],
        7 => [
            "description" => "Monster Energy® Ultra Peachy Keen® 500ml can - carbonated peach flavour energy drink with taurine, ginseng, caffeine, L-carnitine and B vitamins with sweeteners. Serve cold for maximum refreshment.",
            "tags" => ['peach']
        ],
        8 => [
            "description" => "Monster Energy Ultra Fiesta 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Fiesta Mango has a cool mango flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Ultra’s lighter tasting flavour profile is a less sweet, carbonated energy drink that delivers refreshment. Ultra is great for any occasion. Serve cold for maximum refreshment.",
            "tags" => ['mango']
        ],
        9 => [
            "description" => "Monster Energy Ultra Rosá 500ml can, zero sugar energy drink with energy blend and 150mg caffeine. Ultra Rosá has a bright and sweet flavour. It doesn’t taste like traditional energy drinks, but still has the full Monster energy blend. Crafted with a light and easy drinking flavor that’s also crisp and complex with a floral finish. There’s no better way to describe the taste than – it tastes like Ultra Rosá! Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
        10 => [
            "description" => "Juiced Monster Mango Loco 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Mango Loco is a heavenly blend of exotic juice flavours certain to attract even the most stubborn spirit. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
        11 => [
            "description" => "Punch Monster Pacific Punch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Pacific Punch typical punch is Not! Lighter less sweet and more complex plus the Monster Energy blend. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
        12 => [
            "description" => "Punch Monster Pipeline Punch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Pipeline Punch is the perfect blend of the best flavours Hawaii has to offer plus the Monster Energy blend. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
        13 => [
            "description" => "Juiced Monster Monarch 500ml can - carbonated energy drink with taurine, L-carnitine, inositol and B vitamins. Monster Energy Juiced Monarch has a light, subtle flavour with hints of peach and nectarine. Juiced Monster delivers full fruit flavours with 160mg of caffeine. Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
        14 => [
            "description" => "Juiced Monster® Bad Apple® 500ml can - carbonated energy drink with 6% fruit juice from fruit juice concentrate, taurine, ginseng, caffeine, L-carnitine and B vitamins with sugars and sweeteners. Serve cold for maximum refreshment.",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id] ?? false;
}
