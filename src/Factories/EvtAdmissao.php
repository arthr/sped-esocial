<?php

namespace NFePHP\eSocial\Factories;

use NFePHP\eSocial\Factories\Factory;
use NFePHP\eSocial\Factories\FactoryInterface;
use stdClass;

class EvtAdmissao extends Factory implements FactoryInterface
{
    const EVT_NAME = 'evtAdmissao';

    public function __construct(stdClass $std)
    {
        parent::__construct($std);
    }
    

    public function toNode()
    {
/*
 <?xml version="1.0" encoding="UTF-8"?>
<eSocial xmlns="http://www.esocial.gov.br/schema/evt/evtAdmissao/v02_02_01" 
 * xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
 * xsi:schemaLocation="http://www.esocial.gov.br/schema/evt/evtAdmissao/v02_02_01 
 * ../schemes/evtAdmissao.xsd ">
  <evtAdmissao Id="idvalue0">
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
    <trabalhador>
      <cpfTrab>cpfTrab</cpfTrab>
      <nisTrab>nisTrab</nisTrab>
      <nmTrab>nmTrab</nmTrab>
      <sexo>sexo</sexo>
      <racaCor>0</racaCor>
      <grauInstr>grauInstr</grauInstr>
      <indPriEmpr>indPriEmpr</indPriEmpr>
      <nascimento>
        <dtNascto>2001-01-01</dtNascto>
        <paisNascto>paisNascto</paisNascto>
        <paisNac>paisNac</paisNac>
      </nascimento>
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
    </trabalhador>
    <vinculo>
      <matricula>matricula</matricula>
      <tpRegTrab>0</tpRegTrab>
      <tpRegPrev>0</tpRegPrev>
      <infoRegimeTrab>
        <infoCeletista>
          <dtAdm>2001-01-01</dtAdm>
          <tpAdmissao>0</tpAdmissao>
          <indAdmissao>0</indAdmissao>
          <tpRegJor>0</tpRegJor>
          <natAtividade>0</natAtividade>
          <cnpjSindCategProf>cnpjSindCategProf</cnpjSindCategProf>
          <FGTS>
            <opcFGTS>0</opcFGTS>
          </FGTS>
        </infoCeletista>
      </infoRegimeTrab>
      <infoContrato>
        <codCateg>0</codCateg>
        <remuneracao>
          <vrSalFx>0.0</vrSalFx>
          <undSalFixo>0</undSalFixo>
        </remuneracao>
        <duracao>
          <tpContr>0</tpContr>
        </duracao>
        <localTrabalho/>
      </infoContrato>
    </vinculo>
  </evtAdmissao>
  <Signature/>
</eSocial>
 */
    }
}
