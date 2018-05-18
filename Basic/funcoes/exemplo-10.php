<?php 	

$hierarquia = array(
	array(
	'nome_cargo'=>'CEO',
	'subordinados'=>array(
		//inicio:Diretor comercial
		array(
			'nome_cargo' => 'Diretor Comercial',
			'subordinados'=>array(
				//inicio:Gerende de vendas
				array(
					'nome_cargo'=> 'Gerente de Vendas'
				)
				//Termino:Diretor Vendas
			)
		),
		//Termino: Diretor Comercial
		//inicio: Diretor FInanceiro
		array(
			'nome_cargo'=>'Diretor Financeiro',
			'subordinados'=>array(
				array(
					//Inicio gerente de contas a pagar
					'nome_cargo'=>'Gerende de contas a pagar',
					'subordinados'=>array(
						//inicio: Supervisor de pagamentos
						'nome_cargo'=>'Supervisor de pagamentos'
					)
					//Termino: Supervisor de pagamentos
				)
				//Inicio gerente de contas a pagar
			)
		),
		//Termino: Diretor Financeiro
		//Inico: Gerente deCompras
		array(
			'nome_cargo'=>'Gerende de Compras',
			'subordinados'=>array(
				//Inicio: Supervisor de Suprimentos
				'nome_cargo'=> 'Supervisor de Suprimentos'
			)
			//Termino: Supervisor de Suprimentos
		)
		//Termino: Gerente de compras
	)

	)

);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .="<li>";//.= para concatenar todo o html
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);

		}
		$html .="</li>";


	}
	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);

 ?>