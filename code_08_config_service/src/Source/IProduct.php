<?php

namespace Source;

interface IProduct {

	public function setId ($id);
	public function setName ($name);
	public function setDesc ($desc);
	public function getId ();
	public function getName ();
	public function getDesc ();

}