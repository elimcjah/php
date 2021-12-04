<?php

	class MovieCatalogue implements Countable, ArrayAccess, IteratorAggregate
	{
		private $movies = array();
		public function __construct()
		{
		}
          // Countable interface implementation
          public function count() 
		{ 
			return count($this->movies);
		}
		// ArrayAccess interface implementation
		public function offsetExists($index) 
		{
			return isset($this->movies[$index]);
		}
 		public function offsetGet($index) 
		{
			if($this->offsetExists($index)) 
			{
				return $this->movies[$index];
			}
			return false;
		}
 		public function offsetSet($index, $value) 
		{
			if($index) 
			{
				$this->movies[$index] = $value;
			} 
			else 
			{
				$this->movies[] = $value;
			}
			return true;
		}
 		public function offsetUnset($index) 
		{
			unset($this->movies[$index]);
			return true;
		}		
		// IteratorAggregate interface implementation
          public function getIterator() 
		{ 
			return new ArrayIterator($this->movies);
		}  
		// Insert a movie
		public function InsertMovie($movie)
		{
			$this->offsetSet($this->count(),$movie);				
		}
		public function GetAllByDirector($director)
		{
			foreach ($this->movies as $movie)
			{
				if ($movie->GetDirector() == $director)
				{
					$movie->Display();
				}
			}
		}
	}
?>