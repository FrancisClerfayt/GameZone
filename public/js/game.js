const canvas = document.getElementById('board');
const contextBoard = canvas.getContext('2d');

const canvasNext = document.getElementById('next');
const contextNext = canvasNext.getContext('2d');

let gameValues = {
	score: 0,
	level: 0,
	lines: 0
}

function updateCounts(key, value) {
	let element = document.getElementById(key);
	console.log(element);
	if ( element ) {
		element.innerHTML = value;
	}
}

let game = new Proxy(gameValues, {
	set: function(target, key, value) {
		target[key] = value;
		updateCounts(key, value);
		return true;
	}
});

let requestId;

let playButton = document.getElementById('playButton');
playButton.addEventListener('click', function(){
	play();
});

let board = new Board(contextBoard, contextNext);
addListener();
initNext();

moves = {
	[KEYS.LEFT]: p => ({ ...p, x: p.x - 1 }),
	[KEYS.RIGHT]: p => ({ ...p, x: p.x + 1 }),
	[KEYS.DOWN]: p => ({ ...p, y: p.y + 1 }),
	[KEYS.SPACE]: p => ({ ...p, y: p.y + 1 }),
	[KEYS.UP]: p => board.rotate(p)
};

function initNext() {
	contextNext.canvas.width = 4 * BLOCK;
	contextNext.canvas.height = 4 * BLOCK;
	contextNext.scale(BLOCK, BLOCK);
}

function addListener() {
	document.addEventListener('keydown', event => {

		if ( event.code === KEYS.P ) {
			pause();
		}

		if ( event.code === KEYS.ESC ) {
			gameOver();
		} else if ( moves[event.code] ){
			event.preventDefault();

			let p = moves[event.code](board.currentPiece);
			if ( event.code === KEYS.SPACE ) {
				while ( board.isValidMove(p) ) {
					game.score += POINTS.HARD_DROP;
					board.currentPiece.move(p);
					p = moves[KEYS.DOWN](board.currentPiece);
				}
			} else if ( board.isValidMove(p) ) {
				board.currentPiece.move(p);
				if(event.code === KEYS.DOWN) {
					game.score += POINTS.SOFT_DROP;
				}
			}
		}
	});
}

function resetGame() {
	game.score = 0;
	game.lines = 0;
	game.level = 0;
	board.reset();
	time = {
		start: 0,
		elapsed: 0,
		level: LEVEL[game.level]
	};
}

function play() {
	// reseting the game
	resetGame();
	// removing the focus from the button
	playButton.blur();
	// initialising time
	time.start = performance.now();
	// cancel current game if exist
	if ( requestId ) {
		cancelAnimationFrame(requestId);
	}
	// start the piece falling
	animate();
}

function animate(now = 0){
	time.elapsed = now - time.start;

	if ( time.elapsed > time.level ) {
		time.start = now;
		if( !board.drop() ){
			gameOver();
			return;
		}
	}

	contextBoard.clearRect(0, 0, contextBoard.canvas.width, contextBoard.canvas.height);

	board.display();
	requestId = requestAnimationFrame(animate);
}

function gameOver() {
	cancelAnimationFrame(requestId);
	contextBoard.fillStyle = 'black';
	contextBoard.fillRect(1, 3, 8, 1.2);
	contextBoard.font = '1px Arial';
	contextBoard.fillStyle = 'red';
	contextBoard.fillText('FIN DE PARTIE', 1.8, 4);
}

function pause() {
	if ( !requestId ) {
		animate();
		return;
	}

	cancelAnimationFrame(requestId);
	requestId = null;

	contextBoard.fillStyle = 'black';
	contextBoard.fillRect(1, 3, 8, 1.2);
	contextBoard.font = '1px Arial';
	contextBoard.fillStyle = 'yellow';
	contextBoard.fillText('PAUSE', 3, 4);
}