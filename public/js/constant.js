// Constants
'use strict';

const COLUMNS = 10;
const ROWS = 20;
const BLOCK = 30;
const LINES_PER_LEVEL = 10;

// Creating a color array, a color index is a piece color
const COLORS = ['none', 'orange', 'red', 'blue', 'yellow', 'green', 'pink', 'purple'];
Object.freeze(COLORS);

const SHAPES = [
	[],
	[ [0,0,0,0],[1,1,1,1],[0,0,0,0],[0,0,0,0] ],
	[ [2,0,0],[2,2,2],[0,0,0] ],
	[ [0,0,3],[3,3,3],[0,0,0] ],
	[ [0,4,4],[4,4,0],[0,0,0] ],
	[ [5,5,0],[0,5,5],[0,0,0] ],
	[ [0,6,0],[6,6,6],[0,0,0] ],
	[ [7,7],[7,7] ]
];
Object.freeze(SHAPES);

const POINTS = {
	SINGLE: 100,	DOUBLE: 300,	TRIPLE: 500,	TETRIS: 800,	SOFT_DROP: 1,	HARD_DROP: 2
}
Object.freeze(POINTS);

const KEYS = {
	UP: 'ArrowUp', DOWN: 'ArrowDown', RIGHT: 'ArrowRight', LEFT: 'ArrowLeft', 
	ESC: 'Escape', SPACE: 'Space', P: 'KeyP'
}
Object.freeze(KEYS);

const LEVEL = {
	0: 950, 1: 900, 2: 800, 3: 700, 4: 600, 5: 500, 6: 400, 7: 300, 8: 200, 9: 100,
	10: 95, 11: 90, 12: 85, 13: 80, 14: 75, 15: 70, 16: 65, 17: 60, 18: 55, 19: 50,
	20: 47, 21: 45, 22: 42, 23: 40, 24: 37, 25: 35, 26: 32, 27: 30, 28: 30, 29: 27, 30: 27
}
Object.freeze(LEVEL);