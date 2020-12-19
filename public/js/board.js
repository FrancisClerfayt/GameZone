class Board {
	contextBoard;
	contextNext;
	board;
	currentPiece;
	nextPiece;
	requestId;
	time = {
		start: 0,
		elapsed: 0,
		level: LEVEL[game.level]
	};

	constructor(ctx, ctxNext) {
		this.contextBoard = ctx;
		this.contextNext = ctxNext;
		this.initialize();
	}

	initialize() {
		// Set board sizes
		this.contextBoard.canvas.width = COLUMNS * BLOCK;
		this.contextBoard.canvas.height = ROWS * BLOCK;
		this.contextBoard.scale(BLOCK, BLOCK);
	}

	reset() {
		// we empty the board
		this.board = this.emptyBoard();
		// we get a new piece
		this.currentPiece = new Piece(this.contextBoard);
		this.currentPiece.setStartingPosition();
		this.newPiece();
	}

	newPiece() {
		this.nextPiece = new Piece(this.contextNext);
		this.contextNext.clearRect(0, 0, this.contextNext.canvas.width, this.contextNext.canvas.height);
		this.nextPiece.display();
	}

	display() {
		this.currentPiece.display();
		this.drawBoard();
	}

	drop() {
		let piece = moves[KEYS.DOWN](this.currentPiece);
		if(this.isValidMove(piece)){
			this.currentPiece.move(piece);
		} else {
			this.stopPiece();
			this.clearLines();
			if(this.currentPiece.y === 0){
				return false; // Game Over
			}
			this.currentPiece = this.nextPiece;
			this.currentPiece.context = this.contextBoard;
			this.currentPiece.setStartingPosition();
			this.newPiece();
		}
		return true;
	}

	clearLines() {
		let lines = 0;

		this.board.forEach(
			(row, y) => {
				if(row.every(value => value > 0)) {
					lines++;

					this.board.splice(y, 1);

					this.board.unshift(Array(COLUMNS).fill(0));
				}
			}
		);

		if( lines > 0 ) {
			game.score += this.calculatePoints(lines);
			game.lines += lines;
		}

		if( game.lines >= LINES_PER_LEVEL){
			game.level++;
			game.lines -= LINES_PER_LEVEL;
			this.time.level = LEVEL[game.level];
		}
	}

	isValidMove(piece) {
		return piece.shape.every(
			(row, py) => {
				return row.every(
					(value, px) => {
						let x = piece.x + px;
						let y = piece.y + py;
						return ((value === 0) || ((this.betweenWalls(x)) && (this.aboveFloor(y)) && (this.isEmpty(x, y))));
					}
				);
			}
		);
	}

	stopPiece() {
		this.currentPiece.shape.forEach(
			(row, y) => {
				row.forEach(
					(value, x) => {
						if( value > 0 ) {
							this.board[y + this.currentPiece.y][x + this.currentPiece.x] = value;
						}
					}
				);
			}
		);
	}

	drawBoard() {
		this.board.forEach(
			(row, y) => {
				row.forEach(
					(value, x) => {
						if (value > 0) {
							this.contextBoard.fillStyle = COLORS[value];
							this.contextBoard.fillRect(x, y, 1, 1);
						}
					}
				);
			}
		);
	}

	emptyBoard() {
		return Array.from(
			{ length: ROWS },
			() => Array(COLUMNS).fill(0)
		);
	}

	betweenWalls(x) {
		if (x >= 0 && x < COLUMNS) {
			return true;
		} else {
			return false;
		}
	}

	aboveFloor(y) {
		if (y <= ROWS) {
			return true;
		} else {
			return false;
		}
	}

	isEmpty(x, y) {
		if (this.board[y] && this.board[y][x] === 0) {
			return true;
		} else {
			return false;
		}
	}

	rotate(piece) {
		let clone = JSON.parse(JSON.stringify(piece));

		for ( let i = 0; i < clone.shape.length; ++i ) {
			for ( let j = 0; j < i; ++j ) {
				[clone.shape[j][i], clone.shape[i][j]] = [clone.shape[i][j], clone.shape[j][i]];
			}
		}

		clone.shape.forEach(row => row.reverse());

		return clone;
	}

	calculatePoints(lines){
		let linePoints;
		switch (lines) {
			case 1:
				linePoints = POINTS.SINGLE;
				break;
			case 2:
				linePoints = POINTS.DOUBLE;
				break;
			case 3:
				linePoints = POINTS.TRIPLE;
				break;
			case 4:
				linePoints = POINTS.TETRIS;
				break;
			default:
				linePoints = 0;
				break;
		}
		return (game.level + 1) * linePoints;
	}
}