<?php

namespace NFePHP\eSocial\Factories;

use NFePHP\eSocial\Factories\Factory;
use NFePHP\eSocial\Factories\FactoryInterface;
use stdClass;

class EvtAltCadastral extends Factory implements FactoryInterface
{
    const EVT_NAME = 'evtAltCadastral';

    public function __construct(stdClass $std)
    {
        parent::__construct($std);
    }
    

    public function toNode()
    {
/*
 <?xml version="1.0" encoding="UTF-8"?>
<eSocial xmlns="http://www.esocial.gov.br/schema/evt/evtAltCadastral/v02_02_01" 
 * xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
 * xsi:schemaLocation="http://www.esocial.gov.br/schema/evt/evtAltCadastral/v02_02_01 
 * ../schemes/evtAltCadastral.xsd ">
  <evtAltCadastral Id="idvalue0">
    <ideEvento>
      <indRetif>0</indRetif>
      <tpAmb>0</tpAmb>
      <procEmi>0</procEmi>
      <verProc>verProc</verProc>
    </ideEvento>
    <ideEmpregador>
      <tpInsc>0</tpInsc>
      <nrInsc>nrInsc</nrInsc>
    </ideEmpregador>
    <ideTrabalhador>
      <cpfTrab>cpfTrab</cpfTrab>
    </ideTrabalhador>
    <alteracao>
      <dtAlteracao>2001-01-01</dtAlteracao>
      <dadosTrabalhador>
        <nmTrab>nmTrab</nmTrab>
        <sexo>sexo</sexo>
        <racaCor>0</racaCor>
        <grauInstr>grauInstr</grauInstr>
        <endereco>
          <brasil>
            <tpLograd>tpLograd</tpLograd>
            <dscLograd>dscLograd</dscLograd>
            <nrLograd>nrLograd</nrLograd>
            <cep>cep</cep>
            <codMunic>0</codMunic>
            <uf>AC</uf>
          </brasil>
        </endereco>
      </dadosTrabalhador>
    </alteracao>
  </evtAltCadastral>
  <Signature/>
</eSocial>

 */
    }
}
