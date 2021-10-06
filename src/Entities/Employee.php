<?php

namespace App\Entities;

class Employee {

	public $intId;
	public $strName;
	public $intAge;
	public $strCity;
	public $intCTC;
	public $strBloodGroup;

	public function printIdCard() {
		?>
		<table>
			<tbody>
			<tr>
				<td>
					<h2>Entrata</h2>
				</td>
				<td>
					<img src="https://via.placeholder.com/120x140.png?text=<?php echo $this->strName; ?>" />
				</td>
			</tr>
			<?php
			foreach( $this->toArray() as $strAttrib => $mixVal ) {
				?>
				<tr>
					<td>
						<strong><?php echo $strAttrib; ?></strong>
					</td>
					<td>
						<strong><?php echo $mixVal; ?></strong>
					</td>
				</tr>
				<?php

			}
			?>
			</tbody>
		</table>
		<?php
	}

	public function toArray() {
		return [
			'id'   => $this->intId,
			'name' => $this->strName,
			'age'  => $this->intAge,
			'city' => $this->strCity,
			'bg'   => $this->strBloodGroup
		];
	}
}