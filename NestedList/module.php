<?php

declare(strict_types=1);
	class NestedList extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RegisterPropertyString('List', '');
			$this->RegisterPropertyBoolean('KillSwitch', false);
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
		}

		public function UpdateForm( $name, $value)
		{
			switch ($name)
			{
				case 'Type':
					if ($value == 0)
					{
						$this->UpdateFormField('VariableID', 'visible', true);
						$this->UpdateFormField('Value', 'visible', false);
					} else {
						$this->UpdateFormField('VariableID', 'visible', false);
						$this->UpdateFormField('Value', 'visible', true);
					}

					break;
				default:
					print_r('Ergebnis: '.$action.' Value: '.$value);
			}
		}
	}