@extends('layouts.layout')
@section('main-content')
    <div class="min-h-[calc(100vh-335px)]">
        <div>
            <div class="p-5 w-full max-w-screen-xl mx-auto md:mt-24 mt-20">
                <div>
                    <h1 class="text-primary text-center md:text-5xl text-3xl uppercase  mb-7">
                        About us
                    </h1>
                    @if ($siteData && $siteData->about)
                        <p>{{ $siteData->about }}</p>
                    @else
                        <p class="text-gray-700 leading-relaxed">Data not available.</p>
                    @endif
                    <div>
                        <div class="text-primary mt-8">
                            <h1 class="text-3xl uppercase font-bold">
                                Mission &amp; Vision
                            </h1>
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-5">
                            <div>
                                <h1 class="text-primary font-bold text-2xl border-b border-[#00ADF2] mb-3">
                                    Our Mission
                                </h1>
                                @if ($siteData && $siteData->mission)
                                    <p>{{ $siteData->mission }}</p>
                                @else
                                    <p class="text-gray-700 leading-relaxed">Data not available.</p>
                                @endif
                            </div>
                            <div>
                                <h1 class="text-primary font-bold text-2xl border-b border-[#00ADF2] mb-3">
                                    Our Vision
                                </h1>
                                @if ($siteData && $siteData->vision)
                                    <p>{{ $siteData->vision }}</p>
                                @else
                                    <p class="text-gray-700 leading-relaxed">Data not available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="drop-shadow-2xl">
                    <img src="https://i.ibb.co.com/Y26z7ct/ISO-Ark-Power-Ltd.jpg" alt="" />
                </div> --}}
            </div>
            <div class="w-full max-w-screen-xl mx-auto mt-24 mb-10 p-5">
                <h1 class="text-4xl uppercase font-bold mb-5 text-primary">
                    Our Policy
                </h1>
                <div class="mt-5 grid md:grid-cols-2 gap-10">
                    <div>
                        <h1 class="text-primary text-2xl border-b border-[#00ADF2] mb-3">
                            QUALITY POLICY
                        </h1>
                        <p class="leading-6 text-justify">
                            It is a policy of Ark Power Limited to provide an effective
                            and efficient service to its customers, fully meeting
                            specified requirements and the highest standards of safety
                            and reliability.<br />The aim of the Company is to ensure
                            that the highest quality of service is provided to all
                            customers and those materials, techniques and equipment used
                            by the Company are reviewed and updated as necessary. In
                            addition, internal systems are continuously monitored to
                            ensure that the Company is operating as efficiently as
                            possible.<br />The achievement of these aims is assessed at
                            the management review meetings. In pursuance of the policy
                            and aims, the Company has implemented and maintains a
                            quality system in accordance with the requirements of the
                            international quality system standards
                            <span class="font-bold">ISO 9001.</span><br />All employees
                            are made aware of the quality system and instructed in its
                            application. They are required to comply at all items with
                            the provisions of the quality system. Responsibility for the
                            maintenance and review of the quality system is vested in
                            the Managing Director and employees are encouraged to raise
                            with him any problems or suggestions in respect of its
                            documentation or operation.
                        </p>
                    </div>
                    <div>
                        <h1 class="text-primary text-2xl border-b border-[#00ADF2] mb-3">
                            HEALTH AND SAFETY POLICY
                        </h1>
                        <p class="leading-6 text-justify">
                            The safety and health of our employee’s demand at least the
                            same degree of attention and emphasis as that placed on our
                            mainstream activity, which encompasses quality, proficiency
                            efficiency, environmental and financial awareness. We also
                            recognize our responsibilities for health and safety of
                            others who may be affected by our activities.It is our aim
                            to achieve a working environment in all construction
                            projects, which is free of work, related accidents,
                            dangerous occurrences and ill health and to this end we will
                            pursue continuing improvements from year to year. We
                            undertake to discharge our statutory duties by:-<br />Identifying
                            hazards on construction sites, assessing the risks related
                            to them and implementing appropriate preventive and
                            protective measures.
                        </p>
                        <ul class="leading-6 list-disc ms-4">
                            <li>
                                Providing and maintaining safe plant and working
                                equipment. <br />Establishing and enforcing safe methods
                                of work.
                            </li>
                            <li>
                                Recruiting and appointing personnel who have the skills,
                                abilities and competence Commensurate with their role and
                                level of responsibility.
                            </li>
                            <li>
                                Ensuring that technical competence is maintained through
                                the provision of refresher Training as appropriate
                                Promoting awareness of health and safety and of good
                                practice through the effective Communication of relevant
                                information.
                            </li>
                            <li>
                                Furnishing the resources needed to meet these objectives.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5 grid md:grid-cols-2 gap-10">
                    <div>
                        <h1 class="text-primary text-2xl border-b border-[#00ADF2] mb-3">
                            ENVIRONMENTAL POLICY
                        </h1>
                        <p class="leading-6 text-justify">
                            It is Ark Power Limiter’s policy to conduct its business in
                            an environmentally responsible manner: In implementing the
                            policy we will:
                        </p>
                        <ul class="leading-6 list-disc ms-4">
                            <li>
                                Take environmental impact into account in the planning and
                                design of all our site works.
                            </li>
                            <li>
                                Incorporate environmental considerations into our
                                practices with regard to the use of materials, energy
                                consumption, waste disposal and recycling.
                            </li>
                            <li>
                                Work with contractors and suppliers to ensure
                                environmental awareness and responsibility in the
                                execution and management of projects.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-primary text-2xl border-b border-[#00ADF2] mb-3">
                            HEALTH AND SAFETY POLICY
                        </h1>
                        <p class="leading-6 text-justify">
                            It is Ark Power Limiter’s policy to conduct its business in
                            a Customer Support responsible manner: In implementing the
                            policy we will:
                        </p>
                        <ul class="leading-6 list-disc ms-4">
                            <li>Products warranty support.</li>
                            <li>Products contactual support</li>
                            <li>Care about the customer happiness.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
