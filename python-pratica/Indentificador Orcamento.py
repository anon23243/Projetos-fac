salarioreceb = int(input("Digite o salario recebido:"))
gastos = int(input("Quanto voce gastou com esse salario?:"))

if gastos > salarioreceb:
    print("Orçamento estourado!")
elif gastos <= salarioreceb:
    print("Gastos dentro do orçamento!")
