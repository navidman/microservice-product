<?php


namespace App\Traits\Swagger;


trait Product
{
    /**
     * @OA\Info(title="Product-Microservice API", version="0.1")
     */
    /**
    /**
     * @OA\Get(
     * path="/product",
     * summary="products's info",
     * description="Get users's products",
     * operationId="produtsInfo",
     * tags={"Product"},
     * @OA\Response(
     *    response=200,
     *    description="Sucess",
     *    @OA\JsonContent(
     *       @OA\Property(property="data", type="array", collectionFormat="multi",
     *        @OA\Items(
     *             @OA\Property(property="data", type="array", collectionFormat="multi",
     *              @OA\Items(
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="product_no", type="string", example="CESV2SY"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *              )
     *             ),
     *                )
     *         ),
     *           @OA\Property(property="status", type="integer", example=200),
     *        )
     *     )
     * )
     */

    /**
     * @OA\Get(
     * path="/Product/{product_no}",
     * summary="single Product info",
     * description="show product details",
     * operationId="ProductShow",
     * tags={"Product"},
     * @OA\Response(
     *    response=200,
     *    description="Sucess",
     *    @OA\JsonContent(
     *       @OA\Property(property="data", type="array", collectionFormat="multi",
     *        @OA\Items(
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="product_no", type="string", example="CESV2SY"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *              )
     *       ),
     *       @OA\Property(property="status", type="integer", example=200),
     *        )
     *     )
     * )
     */


    /**
     * @OA\Post(
     * path="/product",
     * summary="Create A Product",
     * description="Create a product for an user based on data that passed",
     * operationId="createProduct",
     * tags={"Product"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass Product data",
     *    @OA\JsonContent(
     *       required={"title", "product_no", "description", "amount"},
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Store Response",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="data",
     *           type="object",
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="product_no", type="string", example="CESV2SY"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *        ),
     *       @OA\Property(property="status", type="integer", example="200"),
     *     )
     * ),
     * @OA\Response(
     *    response=400,
     *    description="Wrong Input Data",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="errors",
     *           type="object",
     *           @OA\Property(
     *              property="field name",
     *              type="array",
     *              collectionFormat="multi",
     *              @OA\Items(
     *                 type="string",
     *                 example="error in fields"
     *              ),
     *              property="field_name",
     *              type="array",
     *              collectionFormat="multi",
     *              @OA\Items(
     *                 type="string",
     *                 example="already exists",
     *              )
     *           )
     *        ),
     *       @OA\Property(property="status", type="integer", example=400),
     *       @OA\Property(property="message", type="string", example="wrong data"),
     *        )
     *     )
     * )
     */

    /**
     * @OA\Put(
     * path="/product/{product_no}",
     * summary="Update A Product",
     * description="Update a product for an user based on data that passed",
     * operationId="createProduct",
     * tags={"Product"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass Product data",
     *    @OA\JsonContent(
     *       required={"title", "product_no", "description", "amount"},
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Update Response",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="data",
     *           type="object",
     *               @OA\Property(property="title", type="string", example="mobile"),
     *               @OA\Property(property="product_no", type="string", example="CESV2SY"),
     *               @OA\Property(property="description", type="string", example="some text"),
     *               @OA\Property(property="amount", type="string", example="35000"),
     *        ),
     *       @OA\Property(property="status", type="integer", example="200"),
     *     )
     * ),
     * @OA\Response(
     *    response=400,
     *    description="Wrong Input Data",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="errors",
     *           type="object",
     *           @OA\Property(
     *              property="field name",
     *              type="array",
     *              collectionFormat="multi",
     *              @OA\Items(
     *                 type="string",
     *                 example="error in fields"
     *              ),
     *              property="field_name",
     *              type="array",
     *              collectionFormat="multi",
     *              @OA\Items(
     *                 type="string",
     *                 example="already exists",
     *              )
     *           )
     *        ),
     *       @OA\Property(property="status", type="integer", example=400),
     *       @OA\Property(property="message", type="string", example="wrong data"),
     *        )
     *     )
     * )
     */


    /**
     * @OA\Delete(
     * path="/Product/{product_no}",
     * summary="Delete User's product",
     * description="Delete a product",
     * operationId="DeleteProduct",
     * tags={"Product"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass product's product_no",
     *    @OA\JsonContent(
     *       required={"product_no"},
     *               @OA\Property(property="product_no", type="string", example="CESV2SY"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Update Response",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="data",
     *           type="object",
     *           @OA\Property(property="data", type="array", collectionFormat="multi",
     *            @OA\Items(
     *              )),
     *        ),
     *       @OA\Property(property="status", type="integer", example="200"),
     *     )
     * ),
     *      @OA\Response(
     *    response=400,
     *    description="Wrong Input Data",
     *    @OA\JsonContent(
     *        @OA\Property(
     *           property="errors",
     *           type="object",
     *           @OA\Property(
     *              property="field name",
     *              type="array",
     *              collectionFormat="multi",
     *              @OA\Items(
     *                 type="string",
     *                 example="error in fields"
     *              ),
     *           )
     *        ),
     *       @OA\Property(property="status", type="integer", example=400),
     *       @OA\Property(property="message", type="string", example="wrong data"),
     *        )
     *     )
     * )
     */
}
