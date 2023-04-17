
import openai

openai.api_key = ['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']

model_engine = 'text-davinci-003'

while True:
    prompt = input('Escreva algo:')

    completion = openai.Completion.create(
        egine = model_engine,
        prompt = prompt,
        max_tokens = 1024,
        temperature = 0.5,
    )

    print(50*'-')
    response = completion.choices[0].text
    print(response)