<?php
	class Movie
	{
		private $title;
		private $director;
		private $year;
		private $rating;
		
		public function __construct($title,$director,$year,$rating)
		{
			$this->title = $title;
			$this->director = $director;
			$this->year = $year;
			$this->rating = $rating;
		}
		
		public function GetTitle()
		{
			return $this->title;
		}
		
		public function GetDirector()
		{
			return $this->director;
		}
		
		public function GetYear()
		{
			return $this->year;
		}
		
		public function GetRating()
		{
			return $this->rating;
		}
	}