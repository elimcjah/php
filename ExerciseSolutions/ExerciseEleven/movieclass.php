<?php
	require_once("validatorClass.php");
	class Movie
	{
		private $title;
		private $director;
		private $year;
		private $rating;
		private $validator;
		
		public function __construct($title,$director,$year,$rating)
		{
			$this->validator = new Validator();
			$this->title = $this->validator->Validate($title,alpha);
			$this->director = $this->validator->Validate($director,alpha);
			$this->year = $this->validator->Validate($year,alpha);
			$this->rating = $this->validator->Validate($rating,alpha);
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